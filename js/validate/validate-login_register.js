process.stdin.resume();
process.stdin.setEncoding('utf8');

function validateAndDisplay(id,pass) {
    
    var alphanumeric = /^[a-zA-Z0-9_]*$/;
    var alphanumericsymbol = /^[a-zA-Z0-9!@#$%^&*]*$/;
    var thatisall = /^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])$/;
    // 1文字以上15文字以下か
    if (loginId.length<1 || loginId.length>15){
        //文字についてのエラーをここに
    }

    // 許可する入力は英数字、アンダースコアだけ
    if (!alphanumeric.test(id)) {
        
    }
    
    //8文字以上36文字以下か
    if(loginPass.length<8 || loginPass.length>36){

    }

    //許可するのは英数字、記号のみ
    if (!alphanumericsymbol.test(loginPass)) {
      
    }
    
    //大文字、小文字、数字をそれぞれ1文字以上含んでいるか
    if(!thatisall.test()){

    }


  }
