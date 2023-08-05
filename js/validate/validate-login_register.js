function validateUserId(userId) {
  const userIdRegex = /^[a-zA-Z0-9_]+$/;
  return userIdRegex.test(userId);
}

function validateUserIdCharacterLimit(userId) {
  const userIdCharacterLimitRegex = /^.{1,15}$/;
  return userIdCharacterLimitRegex.test(userId);
}

function validatePassword(password) {
  const passwordRegex = /^[a-zA-Z\d!@#$%^&*]+$/;
  return passwordRegex.test(password);
}

function validatePasswordCharacterLimit(password) {
  const passwordCharacterLimitRegex = /^.{8,36}$/;
  return passwordCharacterLimitRegex.test(password);
}

function validatePasswordCase(password) {
  const passwordCaseRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/;
  return passwordCaseRegex.test(password);
}

//ログインとパスワードのエラー表示場所
function displayLoginIdErrorMessage(message) {
  const errorMessageDiv = document.createElement("div");
  errorMessageDiv.innerText = message;
  errorMessageDiv.style.color = "red";
  document.getElementById("loginIdErrorMessages").innerHTML = "";
  document.getElementById("loginIdErrorMessages").appendChild(errorMessageDiv);
}

function displayLoginPassErrorMessage(message) {
  const errorMessageDiv = document.createElement("div");
  errorMessageDiv.innerText = message;
  errorMessageDiv.style.color = "red";
  document.getElementById("loginPassErrorMessages").innerHTML = "";
  document.getElementById("loginPassErrorMessages").appendChild(errorMessageDiv);
}

function displayRegisterIdErrorMessage(message) {
  const errorMessageDiv = document.createElement("div");
  errorMessageDiv.innerText = message;
  errorMessageDiv.style.color = "red";
  document.getElementById("registerIdErrorMessages").innerHTML = "";
  document.getElementById("registerIdErrorMessages").appendChild(errorMessageDiv);
}

function displayRegisterPassErrorMessage(message) {
  const errorMessageDiv = document.createElement("div");
  errorMessageDiv.innerText = message;
  errorMessageDiv.style.color = "red";
  document.getElementById("registerPassErrorMessages").innerHTML = "";
  document.getElementById("registerPassErrorMessages").appendChild(errorMessageDiv);
}

function displayRegisterPassConfirmErrorMessage(message) {
  const errorMessageDiv = document.createElement("div");
  errorMessageDiv.innerText = message;
  errorMessageDiv.style.color = "red";
  document.getElementById("registerPassConfirmErrorMessages").innerHTML = "";
  document.getElementById("registerPassConfirmErrorMessages").appendChild(errorMessageDiv);
}


//　ログインのidのinputイベントリスナーを追加
document.getElementById("login_id").addEventListener("input", function (event) {
  const loginuserId = event.target.value;
  const errorMessageDiv = document.getElementById("loginIdErrorMessages");
  errorMessageDiv.innerHTML = "";

  if (!validateUserId(loginuserId)) {
    displayLoginIdErrorMessage("ユーザIDは英数字と_（アンダーバー）のみで構成する必要があります。");
  } else if (!validateUserIdCharacterLimit(loginuserId)) {
    displayLoginIdErrorMessage("ユーザIDは1文字以上15文字以下である必要があります。");
  }
});

//　ログインのパスワードのinputイベントリスナーを追加 
document.getElementById("login_pass").addEventListener("input", function (event) {
  const loginpassword = event.target.value;
  const errorMessageDiv = document.getElementById("loginPassErrorMessages");
  errorMessageDiv.innerHTML = "";

  if (!validatePassword(loginpassword)) {
    displayLoginPassErrorMessage("パスワードは英数字、もしくは記号（!@#$%^&*）のみで構成される必要があります");
  } else if (!validatePasswordCharacterLimit(loginpassword)) {
    displayLoginPassErrorMessage("パスワードは,8文字以上36文字以下で構成する必要があります。");
  } else if (!validatePasswordCase(loginpassword)) {
    displayLoginPassErrorMessage("パスワードは大文字、小文字、数字をそれぞれ1文字以上含んでいる必要があります。");
  }
});


// 新規登録のユーザーIDのinputイベントリスナーを追加
document.getElementById("register_id").addEventListener("input", function (event) {
  const registeruserId = event.target.value;
  const errorMessageDiv = document.getElementById("registerIdErrorMessages");
  errorMessageDiv.innerHTML = "";

  if (!validateUserId(registeruserId)) {
    displayRegisterIdErrorMessage("ユーザIDは英数字と_（アンダーバー）のみで構成する必要があります。");
  } else if (!validateUserIdCharacterLimit(registeruserId)) {
    displayRegisterIdErrorMessage("ユーザIDは1文字以上15文字以下である必要があります。");
  }
});

// 新規登録のパスワードのinputイベントリスナーを追加
document.getElementById("register_pass").addEventListener("input", function (event) {
  const registerpassword = event.target.value;
  const errorMessageDiv = document.getElementById("registerPassErrorMessages");
  errorMessageDiv.innerHTML = "";

  if (!validatePassword(registerpassword)) {
    displayRegisterPassErrorMessage("パスワードは英数字、もしくは記号（!@#$%^&*）のみで構成される必要があります");
  } else if (!validatePasswordCharacterLimit(registerpassword)) {
    displayRegisterPassErrorMessage("パスワードは,8文字以上36文字以下で構成する必要があります。");
  } else if (!validatePasswordCase(registerpassword)) {
    displayRegisterPassErrorMessage("パスワードは大文字、小文字、数字をそれぞれ1文字以上含んでいる必要があります。");
  }
});

// 新規登録パスワード確認のinputイベントリスナーを追加
document.getElementById("passconfirm").addEventListener("input", function (event) {
  const password = document.getElementById("register_pass").value;
  const confirmPassword = event.target.value;
  const errorMessageDiv = document.getElementById("registerPassConfirmErrorMessages");
  errorMessageDiv.innerHTML = "";

  if (password !== confirmPassword) {
    displayRegisterPassConfirmErrorMessage("確認用パスワードが一致しません。");
  }
});
