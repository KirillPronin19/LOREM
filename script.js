document.getElementById('contact-form').addEventListener('submit', function(event){
    event.preventDefault(); // Отменяем стандартную отправку формы

    const formData = new FormData(this);
    
    alert("Сообщение успешно отправлено!");
});