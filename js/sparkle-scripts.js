let sidebar, sidebarCloser;

window.onload = function(){
	sidebar = document.getElementById('sparkle-sidebar');
	sidebarWrapper = document.getElementById('sparkle-sidebar-wrapper');
	sidebarCloser = document.getElementById('sparkle-sidebar-closer');
	sidebarCloser.addEventListener('click', sparkleSidebarClose)
}





const sparkleSidebarClose = function(){

	if (sidebar.style.height === '0px'){
		sidebar.style.height = 'auto';
		sidebarCloser.textContent = '▲'
	} else {
		sidebar.style.height = '0';
		sidebarCloser.textContent = '▼'
	}
	
}