const bt=document.getElementById('bt')
const select=document.getElementById('select');
const genere=document.getElementById('genere');
var   id=0;
bt.style.display='none';
select.addEventListener('change',function(){
    bt.style.display='block';

});
//function genere(){
bt.addEventListener('click',function(){
    id++;
    //alert(id);
   // genere();
   const label=document.createElement('label');
    label.setAttribute('class','for');
const input1=document.createElement('input');
input1.setAttribute('class','reponse1');
const input2=document.createElement('input');
const src=document.createElement('button')
src.setAttribute('class','src');
const web=document.createElement('img');
web.setAttribute('class','web');
web.setAttribute('src','img/ic-supprimer.png')
/* input2.setAttribute('class','checkbox');
input2.setAttribute('type','checkbox'); */
switch(select.value){
    
    case"text":
    input2.setAttribute('class','checkbox');
    input2.setAttribute('type','radio');
    if(id==1)
    {
        bt.style.display='none';
    } 
    break;
    case"radio":
    input2.setAttribute('class','checkbox');
    input2.setAttribute('type','radio');
    if(id==4)
        {
            bt.style.display='none';
        }
    break;
    case"checkbox":
    input2.setAttribute('class','checkbox');
    input2.setAttribute('type','checkbox');
    if(id==4)
        {
            bt.style.display='none';
        }
    break;
}




//append
src.appendChild(web);
const reponse=document.createElement('div') ;   
reponse.setAttribute('div','reponse');
reponse.appendChild(label);
 label.innerText="Reponse"+ id
reponse.appendChild(input1);
reponse.appendChild(input2);
reponse.appendChild(src);
genere.appendChild(reponse);

//supprimer
src.addEventListener('click',function(){
    reponse.parentNode.removeChild(reponse);
    id--;
});

 
});

