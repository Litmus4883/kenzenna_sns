// 2_preview.js

// Promiseを用いたloadImageメソッドを定義
function promiseLoadImages(file) {
    // resolveとrejectを約束
    return new Promise((resolve, reject) => {
        const fileReader = new FileReader();
        // fileの読み込み
        fileReader.readAsDataURL(file);
        // 成功した場合の処理
        fileReader.onload = (e) => {
            resolve(e.target.result);
        };
        // 失敗した場合の処理
        fileReader.onerror = (error) => {
            reject(error);
        };
    });
}

// プレビューを表示するメソッド
async function loadImages(obj) {
    const preview = document.querySelector("#preview");
    preview.innerHTML = "<p>プレビュー</p>";
    try {
    // 成功した場合の処理
        for(let i = 0; i < obj.files.length; i++) {
            // resolveの内容をimageUrlに代入
            const imageUrl = await promiseLoadImages(obj.files[i]);
            preview.insertAdjacentHTML("beforeend", `<img src="${imageUrl}"/>`);
        }
    // 失敗した場合の処理
    } catch (error) {
        console.log("画像が読み込み中にエラーが発生しました。", error);
    }
}

// loadImagesメソッドの呼び出し
const imageInput = document.querySelector("#imageInput");
imageInput.addEventListener("change", function() {
    loadImages(this);
})