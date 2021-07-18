window.onload = function() {
    document.onkeydown = function ()
    {
        var e = window.event || arguments[0];
        if (e.keyCode == 123) {
            alert('本导航站禁止使用F12。Disallow F12.')
            return false;
        } 
        else
            {
            if ((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)) {
                alert('本导航站禁止使用Ctrl+Shift+I。Disallow Ctrl+Shift+I ')
                return false;
            }
            else
                {
                if ((e.shiftKey) && (e.keyCode == 121)) {
                    alert('本导航站禁止使用Shift+F10。Disallow Shift+F10.')
                    return false;
                }
                else 
                    {
                    if ((e.ctrlKey) && (e.keyCode == 85)) {
                        alert('本导航站禁止使用Ctrl+U。Disallow Ctrl+U.')
                        return false;
                    }
                }
            }
        }
    }
}