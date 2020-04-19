const input = document.getElementById('input')
const loading = document.getElementById('loading')

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
        loading.style.display = "block"
        if (image) image.remove()
        image = await faceapi.bufferToImage(input.files[0])
        const detections = await faceapi.detectAllFaces(image).withFaceExpressions().withAgeAndGender()

        detections.forEach(detection => {
            console.log(detection)
            postToDB(detection)
        });
    })
}

function postToDB(data) {
    axios.post('/api/post', {
            api_data: data
        })
        .then(res => {
            console.log('posted data: ')
            console.log(res)
            window.location.href = '/upload/completed'
        })
        .catch(err => {
            console.log(err)
        })
}