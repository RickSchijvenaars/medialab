const input = document.getElementById('input')
const imgContainer = document.getElementById('img')


Promise.all([
    faceapi.nets.ssdMobilenetv1.loadFromUri('/face-recognition/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('/face-recognition/models'),
    faceapi.nets.faceRecognitionNet.loadFromUri('/face-recognition/models'),
    faceapi.nets.faceExpressionNet.loadFromUri('/face-recognition/models'),
    faceapi.nets.ageGenderNet.loadFromUri('/face-recognition/models')
]).then(start)

async function start() {
    let image
    input.addEventListener('change', async() => {
        if (image) image.remove()
        image = await faceapi.bufferToImage(input.files[0])
        imgContainer.src = image.src
        const detections = await faceapi.detectAllFaces(image).withFaceExpressions().withAgeAndGender()

        detections.forEach(detection => {
            console.log(detection)
            postToDB(detection)
        });
    })
}

function postToDB(data){
    axios.post('/api/post', {
        api_data: data
    })
    .then(res=>{
        console.log('posted data: ')
        console.log(res)
    })
    .catch(err =>{
        console.log(err)
    })
}