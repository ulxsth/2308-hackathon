window.addEventListener('DOMContentLoaded', () => {
    //送信ボタンを取得
    const submit = document.querySelector('.submit');
    //送信ボタンの要素にクリックイベントを設定する
    submit.addEventListener('click',(e) => {
        //デフォルトアクションをキャンセル
        e.preventDefault();

        //「クイズ名」入力欄の空欄、形式をチェック
        //フォームの要素を取得
        const title = document.querySelector('#title');
        //エラーを表示させる要素を取得
        //()内に後でエラー文を表示する場所のdivタグ名を入れとく
        const errMsgTitle = document.querySelector();
        if(!title.value){
            //クラスを追加(エラーメッセージを表示する)
            errMsgTitle.classList.add('form-invalid');
            //エラーメッセージのテキスト
            errMsgTitle.textContent = 'クイズ名が入力されていません';
            //クラスを追加(フォームの枠線を赤くする)
            title.classList.add('input-invalid');
            //後続の処理を止める
            return;
            //入力内容が16文字以内か
        }else if(!contents.value.match(/^({16,})$/)){
            errMsgPass.textContent = '16文字以内で入力してください';
            pass.classList.add('input-invalid');
            return;
        }else{
            //エラーメッセージのテキストに空文字を代入
            errMsgTitle.textContent = '';
            //クラスを削除
            title.classList.remove('input-invalid');
        }

        //「内容」入力欄の空欄、形式チェック
        const contents = document.querySelector('#contemts');
        //()内に後でエラー文を表示する場所のdivタグ名を入れとく
        const errMsgContents = document.querySelector();
        if(!contents.value){
            errMsgContents.classList.add('form-invalid');
            errMsgContents.textContent = '内容が入力されていません';
            contents.classList.add('input-invalid');
            return;
        }else if(!contents.value.match(/^({400,})$/)){
            errMsgPass.textContent = '400文字以内で入力してください';
            pass.classList.add('input-invalid');
            return;
        }else{
            errMsgContents.textContent = '';
            contents.classList.remove('input-invalid');
        }

        //「選択肢」入力欄の空欄、形式チェック
    })
},false);