$(document).ready(function() {
	var arr = document.cookie.split(';');
	if (Array.isArray(arr) && arr[0] != '') {
		for (i = 0; i < arr.length; i++) {
			tmp = arr[i].split('=');
			add(tmp[1]);
		}
	}
})

function ask() {
	var name = prompt("What do you need TO DO?");
	if (name != '') {
		add(name);
	}
}

function add(name) {
	if (name != '' && name != null) {
		$('#ft_list').prepend($('<div>' + name + '</div>').click(del));
		add_cookies(name);
	}

}

function del() {
	if (confirm("Do you really want to delete this TO DO?")) {
	   this.remove();
	   delete_cookies(this.innerHTML);
	}
}


function add_cookies(name) {
	document.cookie = name + "=" + name + ";";
}

function delete_cookies(name) {
	document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
}
