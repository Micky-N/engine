<mky:php>
$p = 'index';
</mky:php>
<mky:if cond="$name == 'false'">
If Page {{ $name }}
<mky:else />
Else Page {{ $name }} - {{ $p }} - <mky:json data="5" />
</mky:if>