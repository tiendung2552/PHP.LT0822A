
// ------------------------- ẩn chữ -------------------

const gioithieu = document.querySelector(".gioithieu")
const chitiet = document.querySelector(".chitiet")
const baoquan = document.querySelector(".baoquan")
if(gioithieu){
	gioithieu.addEventListener("click",function(){
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "block"
	})
}
if(chitiet){
	chitiet.addEventListener("click",function(){
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "block"
	})
}
if(baoquan){
	baoquan.addEventListener("click",function(){
		document.querySelector(".product-content-right-bottom-content-gioithieu").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-chitiet").style.display = "none"
		document.querySelector(".product-content-right-bottom-content-baoquan").style.display = "block"
	})
}
const butTon = document.querySelector(".product-content-right-bottom-top")
if(butTon){
	butTon.addEventListener("click",function(){
		document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
	})


}
