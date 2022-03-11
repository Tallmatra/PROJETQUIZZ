const bt=document.getElementById('bt')
function genere(){
const label=document.createElement('label');
label.setAttribute('class','for');


const input1=document.createElement('input');
input1.setAttribute('class','reponse1')


const input2=document.createElement('input');
input2.setAttribute('class','checkbox');

const input3=document.createElement('input');
input3.setAttribute('class','radio');

const web=document.createElement('img');
web.setAttribute('class','web');

const src=document.createElement('button')
src.setAttribute('class','src');
src.appendChild(web);

const reponse=document.createElement('div') ;   
reponse.setAttribute('div','reponse');
reponse.appendChild(label);
reponse.appendChild(input1);
reponse.appendChild(input2);
reponse.appendChild(input3);
reponse.appendChild(src);

bt.addEventListener('click',function(){
    genere();

});

}
