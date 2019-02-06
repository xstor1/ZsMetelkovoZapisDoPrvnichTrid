function toggle() {
    
      let source = document.getElementById('toggle');
      if(source.innerHTML==='Odškrtnout vše')
      {
          checkboxes = document.querySelectorAll('input[type=checkbox]')
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = false;
  }
      source.innerHTML='Vybrat vše';
      }
      else if(source.innerHTML==='Vybrat vše')
      {
          checkboxes = document.querySelectorAll('input[type=checkbox]')
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = true;
  }
          source.innerHTML ='Odškrtnout vše';
      }
 
  

}