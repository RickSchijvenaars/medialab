const input = document.getElementById('input')
const imgContainer = document.getElementById('img')

Promise.all([
    faceapi.nets.ssdMobilenetv1.loadFromUri('/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('/models'),
    faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
    faceapi.nets.faceExpressionNet.loadFromUri('/models'),
    faceapi.nets.ageGenderNet.loadFromUri('/models')
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
        });
    })
}