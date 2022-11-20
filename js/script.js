
function hideModal(){
	document.getElementById("").style.display = 'none';
}
function change(){
	document.getElementById("update").innerText = "Updated";
}
function showModal(){
    document.getElementById("mod").style.display = 'block';
    document.getElementById("form").style.visibility = 'hidden';
    document.getElementById("form2").style.visibility = 'hidden';

    setTimeout(function(){
        document.getElementById("form2").style.visibility = 'visible';
        document.getElementById("mod").style.display = 'none';
        document.getElementById("form").style.visibility = 'visible';
    },3000);
}
function updater(){
        document.getElementById("updating").style.display = 'block';
        document.getElementById("cont").style.display = 'none';
}
function updateClose(){
	document.getElementById("updating").style.visibility = 'none';
	document.getElementById("cont").style.display = 'flex';
}
function success(){
    document.getElementById("mod").style.display = 'block';
    document.getElementById("updating").style.visibility = 'hidden';
    document.getElementById("cont").style.visibility = 'hidden';

    setTimeout(function(){
        document.getElementById("updating").style.visibility = 'visible';
        document.getElementById("mod").style.display = 'none';
        window.location.href = "t_details.php";
        
    },2000);
}

