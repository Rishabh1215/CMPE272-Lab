function getConfig() {
  return {
    hostName: `http://${window.location.host}/MarketPlace`,
    webApps: [
      {
        name: "Pullo",
        url: "http://cmpe272.me/pullo",
        thumbnail: `images/Homepage.png`,
      },
      {
        name: "Fitness",
        // url: "http://localhost/CMPE272-Lab/price.php",
        url: "https://rs1215.me/Fitness/price.php",
        thumbnail: `images/banner-bg.png`,
      },
      {
        name: "Sixteen-Clothing",
        url: "http://aygupta.me/product.php",
        thumbnail: `https://media.gq.com/photos/60f9c697101cc04fad71e5cf/master/pass/BEST-BASICS-1.jpg`,
      },
      {
        name: "Modernhomes",
        url: "https://ec2-18-224-33-245.us-east-2.compute.amazonaws.com/products.php",
        thumbnail: `https://empireavservices.com/wp-content/uploads/2020/01/18wheelervscar-1024x577.jpg`,
      },
    ],
  };
}
