process.stdin.resume();
process.stdin.setEncoding('utf8');

function handleForm(formType) {
  const form = formType === 'registration' ? document.getElementById("registerForm") : document.getElementById("loginForm");
  const errorMessagesDiv = document.getElementById("errorMessages");
  errorMessagesDiv.innerHTML = "";

  if (formType === 'login') {
    const loginUserId = form.loginUserId.value;
    const loginPassword = form.loginPassword.value;

    // バリデーションのチェック
    if (!validateUserId(loginUserId)) {
        displayErrorMessage("ユーザIDは英数字と_（アンダーバー）のみで構成される必要があります。");
        return;
    }

    if (!validateUserIdCharacterLimit(loginUserId)) {
      displayErrorMessage("ユーザIDは1文字以上15文字以下である必要があります。");
      return;
  }

    // ログイン処理（この部分を実際のログイン処理に置き換える）
    alert("ログインが成功しました！");
} else if (formType === 'registration') {
      const userId = form.userId.value;
      const password = form.password.value;
      const confirmPassword = form.confirmPassword.value;

      // バリデーションのチェック
      if (!validateUserId(userId)) {
          displayErrorMessage("ユーザIDは英数字と_（アンダーバー）のみで構成する必要があります。");
          return;
      }

      if (!validateUserIdCharacterLimit(userId)) {
        displayErrorMessage("1文字以上15文字以下である必要があります。");
        return;
    }

      if (!validatePassword(password)) {
        displayErrorMessage("パスワードは英数字、もしくは記号（!@#$%^&*）のみで構成される必要があります");
        return;
    }

    if (!validatePasswordCharacterLimit(password)) {
      displayErrorMessage("パスワードは,8文字以上36文字以下で構成する必要があります。");
      return;
  }

  if (!validatePasswordCase(password)) {
    displayErrorMessage("パスワードは大文字、小文字、数字をそれぞれ1文字以上含んでいる必要があります。");
    return;
}

    if (password !== confirmPassword) {
        displayErrorMessage("確認用パスワードが一致しません。");
        return;
    }

    // 新規登録処理（この部分を実際の新規登録処理に置き換える）
    alert("新規登録が成功しました！");
    }
}

function validateUserId(userId) {
  const userIdRegex = /^[a-zA-Z0-9_]$/;
  return userIdRegex.test(userId);
}

function validateUserIdCharacterLimit(userId) {
  const userIdCharacterLimitRegex = /^{1,15}$/;
  return userIdCharacterLimitRegex.test(userId);
}

function validatePassword(password) {
  const passwordRegex = /^[a-zA-Z\d!@#$%^&*]$/;
  return passwordRegex.test(password);
}

function validatePasswordCharacterLimit(password) {
  const passwordCharacterLimitRegex = /^{8,36}$/;
  return passwordCharacterLimitRegex.test(password);
}

function validatePasswordCase(password) {
  const passwordCaseRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)$/;
  return passwordCaseRegex.test(password);
}

function displayErrorMessage(message) {
  const errorMessageDiv = document.createElement("div");
  errorMessageDiv.innerText = message;
  errorMessageDiv.style.color = "red";
  document.getElementById("errorMessages").appendChild(errorMessageDiv);
}