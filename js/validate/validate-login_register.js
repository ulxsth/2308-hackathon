process.stdin.resume();
process.stdin.setEncoding('utf8');

function validateInput() {
    var elem = document.getElementById("login-id-error");
    // 数字のみの入力はfalse
    if (/^\d+$/.test(elem)) {
      return false;
    }
    // 1文字以上15文字以下か
    if (.test(elem))
    // 許可する入力は英数字、アンダースコアだけ
    if (/^[a-zA-Z0-9_]*$/.test(elem)) {
      // アンダースコアが先頭・末尾にある場合はfalse
      if (/^[_]|[_]$/.test(elem)) {
        return false;
      }
      // それ以外はtrue
      return true;
    }
    return false;
  }
