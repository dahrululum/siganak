 
@foreach($tar as $child)
<tr bgcolor="#fff">
    
    <td>{{ $child->kode }}</td>
    <td>{{ $child->nama }}</td>
    <td class="text-center">{{ $child->sumber }}</td>
    <td class="text-center">{{ $child->satuan }}</td>
    <td class="col-1 text-center">{{ $child->tahun1 }}</td>
    <td class="col-1 text-center">{{ $child->tahun2 }}</td>
    <td class="col-1 text-center">{{ $child->tahun3 }}</td>
    <td class="col-1 text-center">{{ $child->tahun4 }}</td>
    <td class="col-1 text-center">{{ $child->tahun5 }}</td>
</tr>
    
@endforeach
 