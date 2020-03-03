// Category page
const catPage = document.querySelector("body.tax-product_cat");
if (catPage) {
	console.log("This is a category page.");
}

if (document.body.classList.contains("tax-product_cat")) {
	console.log("This is indeed a category page.");
}

const brochesPage = document.querySelector("body.term-broches-bp");

if (brochesPage) {
	const header = document.querySelector("header.woocommerce-products-header");
	const h1 = document.querySelector("h1");
	h1.style.fontFamily = "Qwigley,cursive";
	h1.style.fontSize = "6rem";
	header.classList.add("header--category");
}
