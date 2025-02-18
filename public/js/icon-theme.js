function updateFavicon() {
    const favicon = document.getElementById("favicon");
    const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
    
    if (prefersDark) {
      favicon.href = "/SmartStockManager-ADSO/public/images/short_lg-light.png";
    } else {
      favicon.href = "/SmartStockManager-ADSO/public/images/short_lg-dark.png";
    }
  }

  updateFavicon();
  window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", updateFavicon);