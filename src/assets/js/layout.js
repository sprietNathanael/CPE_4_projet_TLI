document.getElementById("content_grid").addEventListener('scroll',function(e)
{
    if(this.scrollTop === 0)
    {
        document.getElementById("titleBar").classList.remove("bar_scrolled");
    }
    else
    {
        document.getElementById("titleBar").classList.add("bar_scrolled");
    }
});