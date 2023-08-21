<table>
    <thead>
        <tr>
            {{-- <th style="width: 20px; font-weight: bold;>SN</th> --}}
            @if (in_array($booking_type, [1, 2]))
                <th style="width: 20px; font-weight: bold; text-align: center">Name</th>
            @else
                <th style="width: 20px; font-weight: bold; text-align: center">First Name</th>
                <th style="width: 20px; font-weight: bold; text-align: center">Last Name</th>
            @endif
            <th style="width: 30px; font-weight: bold; text-align: center">Email</th>
            <th style="width: 25px; font-weight: bold; text-align: center">Phone</th>
            @if (in_array($booking_type, [1, 2]))
                <th style="width: 30px; font-weight: bold; text-align: center">{{ $booking_type == 1 ? 'Latest Qualification' : 'Current Qualification' }}</th>
            @endif
            @if ($booking_type == 1)
                <th style="width: 15px; font-weight: bold; text-align: center">Desire Location</th>
            @endif
            @if ($booking_type == 2)
                <th style="width: 25px; font-weight: bold; text-align: center">Interested Course</th>
                <th style="width: 20px; font-weight: bold; text-align: center">Certificate</th>
            @endif
            @if ($booking_type == 3)
                <th style="width: 40px; font-weight: bold; text-align: center">Message</th>
            @endif
            <th style="width: 20px; font-weight: bold; text-align: center">Creation Date</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            if(!empty($bookings)){	
                foreach($bookings as $index => $item){
        ?>
            <tr>
                {{-- <td>{{ $index+1 }}</td> --}}
                @if (in_array($booking_type, [1, 2]))
                    <td>{{ $item->first_name }}</td>
                @else
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                @endif
                <td>{{ $item->email_address }}</td>
                <td>{{ $item->phone_number }}</td>
                @if (in_array($booking_type, [1, 2]))
                    <td>{{ $item->qualification }}</td>
                @endif
                @if ($booking_type == 1)
                    <td>{{ $item->desire_location }}</td>
                @endif
                @if ($booking_type == 2)
                    <td>{{ $item->course_in_interest }}</td>
                    <td>{{ $item->certificate }}</td>
                @endif
                @if ($booking_type == 3)
                    <td>{{ $item->message }}</td>
                @endif
                <td>{{ format_date($item->created_at) }}</td>
            </tr>
        <?php 
            }//foreach
        } else {
                $colspan = $booking_type = 1 ? 5 : ($booking_type == 2 ? 6 : 5);
                echo '<tr>';
                    echo '<td colspan="'.$colspan.'" class="text-center">'.'No Data Found'.'</td>';
                echo '</tr>';
            }
        ?>
    </tbody>
</table>