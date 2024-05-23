// 2_preview.js

function promiseLoadImages(obj) {
    
}















/*

// Promiseを用いたloadImageメソッド。
function promiseLoadImages(file) {
    return new Promise((resolve, reject) => {
        const fileReader = new FileReader();
        fileReader.onload = (event) => {
            resolve(event.target.result);
        };
        fileReader.onerror = (error) => {
            reject(error);
        };
        fileReader.readAsDataURL(file);
    });
}

async function loadImages(obj) {
    const preview = document.querySelector("#preview");
    preview.innerHTML = "<p>プレビュー</p>";
    
    try {
        for(let i = 0; i < obj.files.length; i++) {
            const imageUrl = await promiseLoadImages(obj.files[i]);
            preview.insertAdjacentHTML("afterbegin", `<img src="${imageUrl}"/>`);
        }
    } catch (error) {
        console.log("画像の読み込み中にエラーが発生しました。", error);
    }
}

*/