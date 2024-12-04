@foreach ($records as $record)
    <div
        style="text-align: center; font-size: 16px; font-weight: bold; margin-top: 10px; margin-bottom: 10px; padding-bottom: 10px; border-bottom: 1px solid #ddd;">
        <h2 style="margin: 0; padding: 0;">FORM REIMBURSEMENT</h2>
        <p style="font-size: 14px; color: #169; margin: 0; padding: 0;">PLN ICON PLUS UNIT LAYANAN NTT</p>
        <p style="font-size: 12px; color: #555; margin: 0; padding: 0;">Generated on:
            {{ \Carbon\Carbon::now('Asia/Makassar')->format('d-m-Y H:i') }}</p>
    </div>


    <table width="100%" style="border-collapse: collapse; margin-bottom: 30px; font-family: Arial, sans-serif;">
        <tr>
            <p style="font-size: 12px; color: #555; margin: 0; padding: 0;">No. Kuitansi:</p>
        </tr>
        <tr>
            <!-- Image Section -->
            <td
                style="border: 1px solid #ddd; padding: 10px; width: 50%; vertical-align: top; background-color: #f9f9f9;">
                @if ($record->before && $record->after)
                    @if (!in_array('before', $hiddenCols))
                        <div
                            style="text-align: center; margin-bottom: 10px; width: auto; max-width: 100%; margin-left: auto; margin-right: auto;">
                            <!-- 'Before' Image -->
                            <img src="{{ storage_path('app/public/' . $record->before) }}" alt="Before"
                                style="max-width: {{ getimagesize(storage_path('app/public/' . $record->before))[0] > getimagesize(storage_path('app/public/' . $record->before))[1] ? '80%' : '50%' }}; height: auto; border-radius: 8px; margin-bottom: 5px;">
                            <p style="font-size: 12px; color: #555;">Before</p>
                        </div>
                    @endif

                    @if (!in_array('after', $hiddenCols))
                        <div
                            style="text-align: center; margin-bottom: 10px; width: auto; max-width: 100%; margin-left: auto; margin-right: auto;">
                            <!-- 'After' Image -->
                            <img src="{{ storage_path('app/public/' . $record->after) }}" alt="After"
                                style="max-width: {{ getimagesize(storage_path('app/public/' . $record->after))[0] > getimagesize(storage_path('app/public/' . $record->after))[1] ? '80%' : '50%' }}; height: auto; border-radius: 8px; margin-bottom: 5px;">
                            <p style="font-size: 12px; color: #555;">After</p>
                        </div>
                    @endif
                @else
                    @if (!in_array('documentation', $hiddenCols))
                        <div
                            style="text-align: center; margin-bottom: 10px; width: auto; max-width: 100%; margin-left: auto; margin-right: auto;">
                            <!-- Documentation Image -->
                            <img src="{{ storage_path('app/public/' . $record->documentation) }}" alt="Documentation"
                                style="max-width: {{ getimagesize(storage_path('app/public/' . $record->documentation))[0] > getimagesize(storage_path('app/public/' . $record->documentation))[1] ? '100%' : '50%' }}; height: auto; border-radius: 8px; margin-bottom: 5px;">
                        </div>
                    @endif
                @endif
            </td>

            <!-- Text Details Section -->

            <td style="padding: 15px; width: 50%; vertical-align: top;">
                <!-- <p style="font-size: 12px; color: #555; margin: 0; padding: 0;">No. Kuitansi:</p> -->
                @if (!in_array('user', $hiddenCols))
                    <div style="margin-bottom: 10px;">
                        <strong style="font-size: 14px; color: #333;">Name:</strong>
                        <span style="font-size: 14px; color: #666;">{{ $record->user->name }}</span>
                    </div>
                @endif
                @if (!in_array('date', $hiddenCols))
                    <div style="margin-bottom: 10px;">
                        <strong style="font-size: 14px; color: #333;">Date:</strong>
                        <span
                            style="font-size: 14px; color: #666;">{{ \Carbon\Carbon::parse($record->date)->format('d-m-Y') }}</span>
                    </div>
                @endif
                @if (!in_array('title', $hiddenCols))
                    <div style="margin-bottom: 10px;">
                        <strong style="font-size: 14px; color: #333;">Title:</strong>
                        <span style="font-size: 14px; color: #666;">{{ $record->title }}</span>
                    </div>
                @endif
                @if (!in_array('category', $hiddenCols))
                    <div style="margin-bottom: 10px;">
                        <strong style="font-size: 14px; color: #333;">Kategori:</strong>
                        <span style="font-size: 14px; color: #666;">{{ $record->category }}</span>
                    </div>
                @endif
                @if (!in_array('price', $hiddenCols))
                    <div style="margin-bottom: 10px;">
                        <strong style="font-size: 14px; color: #333;">Price:</strong>
                        <span style="font-size: 14px; color: #666;">Rp
                            {{ number_format($record->price, 0, ',', '.') }}</span>
                    </div>
                @endif
                @if (!in_array('is_paid', $hiddenCols))
                    <div style="margin-bottom: 10px;">
                        <strong style="font-size: 14px; color: #333;">Status:</strong>
                        <span style="font-size: 14px; color: {{ $record->is_paid ? '#28a745' : '#dc3545' }};">
                            {{ $record->is_paid ? 'Paid' : 'Unpaid' }}
                        </span>
                    </div>
                @endif
            </td>
        </tr>
    </table>

    <!-- Divider Between Records -->
    @if (!$loop->last)
        <div style="page-break-after: always;"></div>
    @endif
@endforeach
