const form = document.getElementById('email-form');

form.addEventListener('submit', function(event) {
  event.preventDefault();

  const name = document.getElementById('name-3').value;
  const email = document.getElementById('email-3').value;
  const phone = document.getElementById('Phone').value;
  const message = document.getElementById('Message').value;

  if (!name || !email || !message) {
    alert('Por favor, preencha todos os campos obrigatórios.');
    return;
  }

  const subject = `Nova mensagem de ${name}`;
  const body = `
    Nome: ${name}
    E-mail: ${email}
    Telefone: ${phone}
    Mensagem: ${message}
  `;

  const mailtoLink = `mailto:seuemail@exemplo.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;

  window.location.href = mailtoLink;
});