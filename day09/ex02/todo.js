window.onload = function() {
	var arr = document.cookie.split(';');
	if (Array.isArray(arr) && arr[0] != '') {
		for (i = 0; i < arr.length; i++) {
			tmp = arr[i].split('=');
			add(tmp[1]);
		}
	}
}

function ask() {
	var name = prompt("What do you need TO DO?");
	if (name != '') {
		add(name);
	}
}

function add(name) {
	if (name != '' && name != null) {
		var node = document.createElement("DIV");
		var textnode = document.createTextNode(name);
		node.appendChild(textnode);
		node.addEventListener("click", remove);
		node.addEventListener("click", function() { delete_cookies(name); });
		document.getElementById("ft_list").insertBefore(node, document.getElementById("ft_list").firstChild);
		add_cookies(name);
	}

}

function remove() {
	if (confirm("Do you really want to delete this TO DO?")) {
	   this.parentNode.removeChild(this);
	}
}

function remove() {
	if (confirm("Do you really want to delete this TO DO?")) {
		this.parentNode.removeChild(this);
	}
}

function add_cookies(name) {
	document.cookie = name + "=" + name + ";";
}

function delete_cookies(name) {
	document.cookie = name + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT;";
}
