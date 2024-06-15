function show() {
  console.log('run')
  shownav.classList.toggle("show");
  }
  function changelogo(){
    change=prompt("Enter img name(firstly copy img and past it to asset folder then write down img name with extension(spaces not allowed in img name))");
    logoimg.src="asset/"+change;
    localStorage.setItem("logoimg", change);
    favicon.href="asset/"+localStorage.getItem("logoimg");
  }
  function changeUnitName(){
    change=prompt("Enter Unit Name");
    unitName.innerHTML=change;
    localStorage.setItem("unitName", change);
    
  }
unitName.innerHTML=localStorage.getItem("unitName");
logoimg.src="asset/"+localStorage.getItem("logoimg");