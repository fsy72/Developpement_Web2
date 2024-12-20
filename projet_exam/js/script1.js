// Get references to the necessary DOM elements
const logoutButton = document.querySelector('.logout');
const sidebarLinks = document.querySelectorAll('.sidebar-link');
const contentSections = document.querySelectorAll('.content-section');

// Add event listener for the logout button
logoutButton.addEventListener('click', () => {
  // Add your logout functionality here
  console.log('User logged out');
});

// Add event listeners for the sidebar links
sidebarLinks.forEach((link, index) => {
  link.addEventListener('click', () => {
    // Deactivate all sidebar links
    sidebarLinks.forEach(l => l.classList.remove('active'));
    // Activate the clicked link
    link.classList.add('active');

    // Hide all content sections
    contentSections.forEach(section => section.classList.remove('fadeIn'));
    setTimeout(() => {
      contentSections.forEach(section => section.style.display = 'none');
      // Show the corresponding content section
      contentSections[index].style.display = 'block';
      contentSections[index].classList.add('fadeIn');
    }, 300);
  });
});

// Show the first content section by default
contentSections[0].style.display = 'block';
contentSections[0].classList.add('fadeIn');
sidebarLinks[0].classList.add('active');