process.stdin.resume();
process.stdin.setEncoding('utf8');

function validateAndDisplayId() {
    var loginId = document.getElementById("login-id-error");
    var loginPass = document.getElementById("login-pass-error");
    var legisterId = document.getElementById("register-id-error");
    var legisterPass = document.getElementById("register-pass-error");
    var legisterPassConfirm = document.getElementById("register-pass-confirm-error");
    // 1文字以上15文字以下か
    if (loginId.length<1 || loginId.length>15){
        //文字についてのエラーをここに
    }
    // 許可する入力は英数字、アンダースコアだけ
    if (/^[a-zA-Z0-9_]*$/.test(loginId)) {
      // アンダースコアが先頭・末尾にある場合はfalse
      if (/^[_]|[_]$/.test(loginId)) {
        return false;
      }
      // それ以外はtrue
      return true;
    }
    return false;
  }
