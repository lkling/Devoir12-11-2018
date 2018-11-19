function AfficherLesRegions(user)
{
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Index/AfficherLesRegionsParIdUser",
            data:"user="+user,
            succes:function(data)
            {
                $('#divRegions').empty();
                $('#divRegions').append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
    );
}
function AfficherLesVilles()
{
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Index/AfficherLesVillesParIdRegion",
            data:"idVille="+numRegion,
            succes:function(data)
            {
                $('#divVilles').empty();
                $('#divVilles').append(data);
            },
            error:function()
            {
                alert('Erreur SQL');
            }
        }
    );
}