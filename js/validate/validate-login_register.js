process.stdin.resume();
process.stdin.setEncoding('utf8');

function validateAndDisplay(id,pass) {
    
    var alphanumeric = /^[a-zA-Z0-9_]*$/;
    var alphanumericsymbol = /^[a-zA-Z0-9!@#$%^&*]*$/;
    var thatisall = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])$/;
    // 1文字以上15文字以下か
    if (/{1,15}/.test(id)){
      document.write("1文字以上15文字以下にしてください")
    }

    // 許可する入力は英数字、アンダースコアだけ
    if (!alphanumeric.test(id)) {
      document.write("英数字かアンダーバーだけにしてください")
    }
    
    //8文字以上36文字以下か
    if(/{8,36}/.test(pass)){
      document.write("8文字以上36文字以下にしてください")
    }

    //許可するのは英数字、記号のみ
    if (!alphanumericsymbol.test(pass)) {
      document.write("英数字か記号のみにしてください。")
    }

    //大文字、小文字、数字をそれぞれ1文字以上含んでいるか
    if(!thatisall.test(pass)){
      document.write("大文字、小文字、数字をそれぞれ1文字以上いれてください。")
    }

    //パスワードの確認
    var registerpass=document.getElementById("passward_register");
    var registerpassconfirm=document.getElementById("passward_confirm");
    if(registerpass != registerpassconfirm ){
      document.write("入力値が一致しません。")
    }


  }
