const bt=document.getElementById('bt')
const select=document.getElementById('select');
const genere=document.getElementById('genere');
var   id=0;
bt.style.display='none';
const point=document.getElementById('nbr')  ;
const sous=document.getElementById('sous') ; 
const add=document.getElementById('add');
add.addEventListener('click',()=>{
    point.value++;
});
sous.addEventListener('click', function(){
    if(point.value>1){
        point.value--;  
            }
    if(point.value==1){
sous.style.display='none';
       
    }
});
select.addEventListener('change',function(){
    bt.style.display='block';


});
//function genere(){
bt.addEventListener('click',function(){
    select.addEventListener('change',function(){
    id=0;
    genere.removeChild(reponse);
    });
    id++;
    //alert(id);
   // genere();
   const label=document.createElement('label');
    label.setAttribute('class','for lab');
const input1=document.createElement('input');
input1.setAttribute('class','reponse1');
input1.setAttribute('name','input[]');
const input2=document.createElement('input');
input2.setAttribute('class','box');
const src=document.createElement('button')
src.setAttribute('class','src');
const web=document.createElement('img');
web.setAttribute('class','web');
web.setAttribute('src','img/ic-supprimer.png')
/* input2.setAttribute('class','checkbox');
input2.setAttribute('type','checkbox'); */
switch(select.value){
    
    case"text":
    input2.setAttribute('class','checkbox box');
    input2.setAttribute('type','radio');
    input2.setAttribute('name','text[]');
    if(id==1)
    {
        bt.style.display='none';
    } 
    break;
    case"radio":
    input2.setAttribute('class','checkbox box');
    input2.setAttribute('type','radio');
    input2.setAttribute('name','radio');
    input2.setAttribute('value',id);
    if(id==4)
        {
            bt.style.display='none';
        }
    break;
    case"checkbox":
    input2.setAttribute('class','checkbox box');
    input2.setAttribute('type','checkbox');
    input2.setAttribute('name','checkbox[]');
    input2.setAttribute('value',id);
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
    bt.style.display='block';
    chargement();
});

 
});

function chargement(){
    let rep=document.querySelectorAll('.lab');
    rep.forEach((label,i)=>{
        i++;
        label.innerText="Reponse"+ i;
    });

    let allInputs=document.querySelectorAll('.box');
    allInputs.forEach((input2,a)=>{
        a++;
        input2.setAttribute('value',a);

    });
}