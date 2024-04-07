// preview.js

// loadImageメソッドを定義
function loadImages(obj)
{
    const preview = document.querySelector("#preview");
    
    // スクリプトが呼び出された時点で、HTMLをinsertする
    preview.insertAdjacentHTML("beforebegin", "<p>プレビュー</p>");
    
    for (let i = 0; i < obj.files.length; i++) {
        const fileReader = new FileReader();
        
        // filereaderをインスタンス化したのち、HTML（プレビュー）をinsertする
        // 非同期関数
        fileReader.onload = (event) => {
            preview.insertAdjacentHTML("afterbegin", '<img src="' + event.target.result + '"/>');
        };
        
        // onloadの前に実行される
        // ファイルをロードしている。読み込みが完了した後に
        // onloadイベントが発生する。
        fileReader.readAsDataURL(obj.files[i]);
    }
}

const imageInput = document.querySelector("#imageInput");

imageInput.addEventListener("change", function() {
    loadImages(this);
});