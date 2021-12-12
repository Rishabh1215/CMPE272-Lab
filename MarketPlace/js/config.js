function getConfig() {
  return {
    hostName: `http://${window.location.host}/MarketPlace`,
    webApps: [
      {
        name: "Pullo",
        url: "http://cmpe272.me/pullo",
        thumbnail: `images/shoes1.png`,
      },
      {
        name: "Fitness",
        // url: "http://localhost/CMPE272-Lab/price.php",
        url: "https://rs1215.me/Fitness/price.php",
        thumbnail: `images/fitness.png`,
      },
      {
        name: "Sixteen-Clothing",
        url: "http://aygupta.me/product.php",
        thumbnail: `images/six.png`,
      },
      {
        name: "Modernhomes",
        url: "https://ec2-18-224-33-245.us-east-2.compute.amazonaws.com/products.php",
        thumbnail: `https://empireavservices.com/wp-content/uploads/2020/01/18wheelervscar-1024x577.jpg`,
      },
    ],
  };
}
