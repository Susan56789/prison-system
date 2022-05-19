//validate form input for prisoner details
function prisoner() {
  function validate(e) {
    e.preventDefault();
    alert("All fields are required!");
  }

  const photoField = document.getElementById("photo");
  let valid = true;

  if (!photoField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const idField = document.getElementById("Nid");
  if (!idField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const nameField = document.getElementById("Fname");
  if (!nameField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const dobField = document.getElementById("1date");
  if (!dobField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const inField = document.getElementById("2date");
  if (!inField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const outField = document.getElementById("3date");
  if (!outField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const addressField = document.getElementById("address");
  if (!addressField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const countyField = document.getElementById("county");
  if (!countyField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const offField = document.getElementById("offence");
  if (!offField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const sentField = document.getElementById("sentence");
  if (!sentField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }

  const fileField = document.getElementById("Filenum");
  if (!fileField.value) {
    const Error = document.getElementById("error");
    Error.classList.add("visible");
    photoField.classList.add("invalid");
    Error.setAttribute("aria-hidden", false);
    Error.setAttribute("aria-invalid", true);
    return false;
  }
  const submit = document.getElementById("Add");
  submit.addEventListener("submit", validate);

  return valid;
}

prisoner();
