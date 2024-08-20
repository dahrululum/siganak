 
@foreach($tar as $child)
<tr bgcolor="#fff">
   
    
    <td>{{ $child->kode }}</td>
    <td><span style="padding-left:0px;">{{ $child->nama }}</span></td>
    <td ><span style="padding-left:0px;">{{ $child->sumber }}</span></td>
    <td><span style="padding-left:0px;">{{ $child->satuan }}</span></td>
    <td class="col-2"></td>
</tr>
    
@endforeach
 