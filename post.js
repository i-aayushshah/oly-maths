// Get all post elements
const posts = document.querySelectorAll('.post');

posts.forEach((post) => {
  
  const clapButton = post.querySelector('.clap-btn');

  // Add event listener to clap button
  clapButton.addEventListener('click', () => {
    const clapCount = clapButton.dataset.count || 0;
    clapButton.dataset.count = parseInt(clapCount) + 1;
    clapButton.innerHTML = `<i class="fas fa-hand-holding-heart"></i> Thanks (${clapButton.dataset.count})`;
  });

});

