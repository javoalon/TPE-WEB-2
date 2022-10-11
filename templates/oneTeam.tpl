{include file="header.tpl"}
<div class="center">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Posicion</th>
                <th scope="col">Equipo</th>
                <th scope="col">Numero</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$team item=$player}
                <tr>
                    <td>
                        {$player->nombre}
                    </td>
                    <td>
                        {$player->posicion}
                    </td>
                    <td>
                        {$player->equipo}
                    </td>
                    <td>
                        {$player->numero}
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>