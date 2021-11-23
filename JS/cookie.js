$('.qookies').qookies();

$('.qookies').qookies({
  theme:'theme-default',
  position:'bottom-right',
  expires: 30,// 30 days
  path:'/',
  value:'1',
  cookieName:'qookies-accepted',
  link: {
    text: lang.link.text,
    url: lang.link.url
  },
});

var lang= {
    title:"Privacy Policy",
    description:"<p> This website uses cookies to ensure you get the best experience on our website.  </p>",
    link:{
      text:"Read More",
      url:"//www.jqueryscript.net/privacy/"
    },
    buttons:{
      accept:"Got it!",
      cancel:"Cancel"
    }
};
