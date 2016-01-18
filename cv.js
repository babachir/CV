function show(id,height)
{
var balise = document.getElementById(id);
var statu = balise.getAttribute('data-id');

	
	 if(statu=="disable")
	 {
		balise.style.height = "auto";
		balise.setAttribute('data-id','enable');
	 }
	 else
	 {
		balise.style.height = "0px";
		balise.setAttribute('data-id','disable');
	 }
	 


}