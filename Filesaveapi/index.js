const puppeteer = require('puppeteer');
var express = require('express');
var app = express();
const port = 3000
app.listen(port, () => {console.log('litsening on port 3000')})


app.post('/saveformirf', (req, res) => { 
  let today = new Date().toISOString().slice(0, 10);
  console.log("recieved a post request!");
  console.log("date:" + today)
  var formid = req.query.formid;
  console.log("request form id: " + formid + "Form type:ir");
  //puppeteer
  (async () => {
    const browser = await puppeteer.launch({
      ignoreHTTPSErrors: true,
      });
      console.log("puppeteer has launched")
    const page = await browser.newPage();

    const website_url = 'https://localhost/gtsonlineforms/backend/Convertforms/IR-F.php?formid=' + formid; 
  
    await page.goto(website_url, { waitUntil: 'networkidle0' }); 
     console.log("processing form.")
    await page.emulateMediaType('screen');
    const pdf = await page.pdf({
      path: '../../../../Current SharePoint/GOOD TURN SERVICES/GTS - Sharepoint/10. IT/Test_folder/IR-F/Incident report#' + formid +"(" + today +").pdf",
      margin: { top: '0px', right: '0px', bottom: '0px', left: '0px' },
      printBackground: true,
      width: "2480px",
      height: "3508px",
    });
    console.log("form has been saved to sharepoint");
    await browser.close();
    console.log("Process has been terminated.")
  })();

  res.send('POST ok');
  
});


app.post('/saveformhif', (req, res) => { 
  let today = new Date().toISOString().slice(0, 10);
  console.log("recieved a post request!");
  console.log("date:" + today);
  var formid = req.query.formid;
  var adr = req.query.adr;
  console.log("request form id: " + formid + " form type:hi-f");
  if(adr == "39ede"){
      var ext = "39E Delambre Drive";
  }else if(adr == "39baj"){
      var ext = "39 Bajamalu Drive";
  }else if(adr == "39bde"){
      var ext = "39B Delambre Drive";
  }
  //puppeteer
  (async () => {
    const browser = await puppeteer.launch({
      ignoreHTTPSErrors: true,
      });
      console.log("puppeteer has launched")
    const page = await browser.newPage();

    const website_url = 'https://localhost/gtsonlineforms/backend/Convertforms/HI-F.php?formid=' + formid; 
  
    await page.goto(website_url, { waitUntil: 'networkidle0' }); 
    console.log("processing form.")
    await page.emulateMediaType('screen');
    const pdf = await page.pdf({
      path: '../../../../Current SharePoint/GOOD TURN SERVICES/GTS - Sharepoint/01. Administration/Front Office/Assest List/House Inspections/' + ext + "/House inspection#" + formid +"(" + today +").pdf",
      margin: { top: '0px', right: '0px', bottom: '0px', left: '0px' },
      printBackground: true,
      width: "2480px",
      height: "3508px",
    });
    console.log("form has been saved to sharepoint");
    await browser.close();
    console.log("Process has been terminated.")
  })();

  res.send('POST ok');
  
});
console.log
