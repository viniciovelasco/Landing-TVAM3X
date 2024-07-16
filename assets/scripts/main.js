window.addEventListener('load', () => {

  // Form
  const form = document.getElementById("tvia-form")

  form.addEventListener("submit", function (event) {
    event.preventDefault()

    // Get form data
    var formData = new FormData(this)

    // Perform AJAX request
    var xhr = new XMLHttpRequest()
    xhr.open("POST", "form.php", true)
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          // Display server response in the message container
          form.style.display = 'none'
          document.getElementById("tvia-form-message").innerHTML = xhr.responseText
        } else {
          // Display an error message if AJAX request fails
          document.getElementById("tvia-form-message").innerHTML = '<div class="message-popup-error">Error al enviar el formulario. Por favor, inténtalo más tarde.</div>'
        }
      }
    }
    xhr.send(formData)
  })

})