function search_course() {
  let input = document.getElementById('searchbar').value.toLowerCase();
  let items = document.getElementsByClassName('course');
  let list = document.getElementById('list');

  if (input === '') {
    list.style.display = 'none';
    return;
  }
  

  list.style.display = 'block';

  for (let i = 0; i < items.length; i++) {
    let itemText = items[i].textContent.toLowerCase();
    if (itemText.includes(input)) {
      items[i].style.display = "list-item";
    } else {
      items[i].style.display = "none";
    }
  }
}
document.addEventListener('click', function(event) {
  let target = event.target;
  let list = document.getElementById('list');
  
  if (target.id !== 'searchbar' && !list.contains(target)) {
    list.style.display = 'none';
  }
});