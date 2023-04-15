fetch('navbar.html')
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.text();
  })
  .then(data => {
    const navbar = document.querySelector('#navbar');
    if (navbar) {
      navbar.innerHTML = data;
    }
  })
  .catch(error => {
    console.error('Error fetching navbar:', error);
  });
