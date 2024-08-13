 
@foreach($tar as $child)
<tr bgcolor="#fff">
   
    
    <td>{{ $child->kode }}</td>
    <td><span style="padding-left:0px;">{{ $child->nama }}</span></td>
    <td><span style="padding-left:0px;">{{ $child->sumber }}</span></td>
    <td><span style="padding-left:0px;">{{ $child->satuan }}</span></td>
    <td>{{ $child->tahun1 }}</td>
    <td>{{ $child->tahun2 }}</td>
    <td>{{ $child->tahun3 }}</td>
    <td>{{ $child->tahun4 }}</td>
    <td>{{ $child->tahun5 }}</td>
    
    <td><a class="btn btn-success btn-xs" href="{{ URL::to('/admin/isinindi/'.$child->id) }}"><i class="fa fa-edit"></i> Entry</a>
        
        </td>
</tr>
    
@endforeach
 