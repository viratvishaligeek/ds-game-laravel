@extends('backend.include.layout')
@section('page-header')
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            {{ $pageName }}
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{ route('admin.users.create') }}">
                            <i class="me-1" data-feather="user-plus"></i>
                            Add User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i data-feather="check-circle" class="me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i data-feather="alert-circle" class="me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Please review the request:</strong>
            <ul class="mb-0 mt-2">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif


    <div class="card mb-3">
        <div class="card-body">
            <form method="GET" class="row g-2 align-items-end">
                <div class="col-12 col-md-4">
                    <label class="form-label" for="live_status_filter">Live presence</label>
                    <select class="form-select" id="live_status_filter" name="live_status">
                        <option value="">All clients</option>
                        <option value="active" @selected(($liveStatus ?? '') === 'active')>Active clients</option>
                        <option value="inactive" @selected(($liveStatus ?? '') === 'inactive')>Inactive clients</option>
                    </select>
                </div>
                <div class="col-auto"><button class="btn btn-primary" type="submit">Apply</button></div>
                <div class="col-auto"><a class="btn btn-light border" href="{{ route('admin.users.index') }}">Reset</a></div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>Live Presence</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Balance</th>
                        <th>Status</th>
                        <th>Live Presence</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>#{{ $loop->iteration }}</td>
                            <td>
                                <div class="fw-bold">{{ $user->name }}</div>
                                <small class="text-muted">{{ $user->gender ?? 'N/A' }}</small>
                            </td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->city ?? 'N/A' }}</td>
                            <td>
                                <span class="badge bg-primary-soft text-primary user-balance"
                                    data-user-id="{{ $user->id }}"
                                    data-balance="{{ number_format((float) $user->balance, 2, '.', '') }}">
                                    ₹{{ number_format((float) $user->balance, 2) }}
                                </span>
                            </td>
                            <td data-user-status-cell="{{ $user->id }}">
                                @if ($user->status === 'active')
                                    <span class="badge bg-success-soft text-success" data-user-status="active">Active</span>
                                @else
                                    <span class="badge bg-danger-soft text-danger" data-user-status="inactive">Blocked</span>
                                @endif
                            </td>
                            <td data-live-status-cell="{{ $user->id }}">
                                <span class="badge {{ $user->live_status === 'active' ? 'bg-success' : 'bg-secondary' }}"
                                    data-live-status="{{ $user->live_status ?? 'inactive' }}">
                                    {{ ucfirst($user->live_status ?? 'inactive') }}
                                </span>
                            </td>
                            <td>{{ $user->created_at ? $user->created_at->format('d M Y') : 'N/A' }}</td>
                            <td>
                                <button type="button"
                                    class="btn btn-success add-money-btn "
                                    data-user-id="{{ $user->id }}"
                                    data-user-name="{{ $user->name }}"
                                    data-balance="{{ number_format((float) $user->balance, 2, '.', '') }}"
                                    data-action="{{ route('admin.wallet.credit', $user->id) }}"
                                    title="Add Money / Credit">
                                    <i data-feather="plus-circle"></i>
                                </button>

                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-1"
                                    href="{{ route('admin.users.show', $user->id) }}" title="View User">
                                    <i data-feather="eye" class="text-success"></i>
                                </a>

                                <a class="btn btn-datatable btn-icon btn-transparent-dark me-1"
                                    href="{{ route('admin.users.edit', $user->id) }}" title="Edit User">
                                    <i data-feather="edit" class="text-primary"></i>
                                </a>

                                <form action="{{ route('admin.users.toggle-status', $user->id) }}" method="POST"
                                    id="status-form-{{ $user->id }}" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    @if ($user->status === 'active')
                                        <button type="button"
                                            class="btn btn-datatable btn-icon btn-transparent-dark text-warning toggle-status-btn"
                                            data-id="{{ $user->id }}" data-name="{{ $user->name }}"
                                            data-action="block" title="Block User">
                                            <i data-feather="slash" class="text-warning"></i>
                                        </button>
                                    @else
                                        <button type="button"
                                            class="btn btn-datatable btn-icon btn-transparent-dark text-success toggle-status-btn"
                                            data-id="{{ $user->id }}" data-name="{{ $user->name }}"
                                            data-action="unblock" title="Unblock User">
                                            <i data-feather="check-circle" class="text-info"></i>
                                        </button>
                                    @endif
                                </form>

                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                    id="delete-form-{{ $user->id }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                        class="btn btn-datatable btn-icon btn-transparent-dark text-danger delete-user-btn"
                                        data-id="{{ $user->id }}" data-name="{{ $user->name }}" title="Delete User">
                                        <i data-feather="trash-2" class="text-danger"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Admin credit modal: remains on the User List page. --}}
    <div class="modal fade" id="addMoneyModal" tabindex="-1" aria-labelledby="addMoneyModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form id="addMoneyForm">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMoneyModalLabel">Add Money to User</h5>
                        <button type="button" class="btn-close" id="closeAddMoneyModal" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="addMoneyError" class="alert alert-danger d-none" role="alert"></div>
                        <div id="addMoneySuccess" class="alert alert-success d-none" role="alert"></div>

                        <div class="rounded border bg-light p-3 mb-3">
                            <div class="small text-muted">Selected User</div>
                            <div class="fw-bold" id="creditUserName">—</div>
                            <div class="small text-muted">User ID: <span id="creditUserId">—</span></div>
                            <div class="mt-2">Current Balance: <strong id="creditCurrentBalance">₹0.00</strong></div>
                        </div>

                        <input type="hidden" id="creditActionUrl" value="">
                        <input type="hidden" name="idempotency_key" id="creditIdempotencyKey" value="">

                        <div class="mb-3">
                            <label for="creditAmount" class="form-label fw-bold">Amount (₹)</label>
                            <input type="number" class="form-control" id="creditAmount" name="amount"
                                min="0.01" max="1000000" step="0.01" inputmode="decimal" required>
                            <div class="form-text">Enter a positive amount, up to two decimal places.</div>
                        </div>

                        <div class="mb-2">
                            <label for="creditRemark" class="form-label fw-bold">Remark / Reason (optional)</label>
                            <textarea class="form-control" id="creditRemark" name="remark" rows="2" maxlength="255"
                                placeholder="Reason for admin credit"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" id="cancelAddMoneyModal" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" id="submitCreditButton">
                            <i data-feather="plus-circle" class="me-1"></i> Add Money
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('backend') }}/js/datatables/datatables-simple-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function () {
            const $modalElement = $('#addMoneyModal');
            const modal = ($modalElement.length && window.bootstrap)
                ? bootstrap.Modal.getOrCreateInstance($modalElement.get(0))
                : null;
            const $form = $('#addMoneyForm');
            const $amount = $('#creditAmount');
            const $remark = $('#creditRemark');
            const $action = $('#creditActionUrl');
            const $key = $('#creditIdempotencyKey');
            const $error = $('#addMoneyError');
            const $success = $('#addMoneySuccess');
            const $submit = $('#submitCreditButton');
            const $close = $('#cancelAddMoneyModal, #closeAddMoneyModal');

            const requestKey = () => {
                if (window.crypto && typeof window.crypto.randomUUID === 'function') return window.crypto.randomUUID();
                return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, character => {
                    const random = Math.random() * 16 | 0;
                    return (character === 'x' ? random : (random & 0x3 | 0x8)).toString(16);
                });
            };
            const notify = (icon, title, text) => {
                if (window.Swal?.fire) return window.Swal.fire({ icon, title, text });
                window.alert(text || title);
                return Promise.resolve();
            };
            const showCreditError = message => {
                $error.text(message || 'Unable to credit wallet.').removeClass('d-none');
                $success.addClass('d-none');
            };

            $(document).on('click.adminUsers', '.add-money-btn', function (event) {
                event.preventDefault();
                if (!modal) return;
                const $button = $(this);
                const balance = Number($button.data('balance') || 0);
                $('#creditUserName').text($button.data('user-name') || '—');
                $('#creditUserId').text($button.data('user-id') || '—');
                $('#creditCurrentBalance').text('₹' + balance.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
                $action.val($button.data('action') || '');
                $key.val(requestKey());
                $amount.val('');
                $remark.val('');
                $error.add($success).addClass('d-none');
                $submit.prop('disabled', false).html('<i data-feather="plus-circle" class="me-1"></i> Add Money');
                $close.prop('disabled', false);
                if (window.feather) window.feather.replace();
                modal.show();
            });

            $form.on('submit.adminUsers', async function (event) {
                event.preventDefault();
                $error.add($success).addClass('d-none');
                const amount = String($amount.val() || '').trim();
                if (!amount || !Number.isFinite(Number(amount)) || Number(amount) <= 0 || !/^\d+(?:\.\d{1,2})?$/.test(amount)) {
                    showCreditError('Enter a valid positive amount with no more than two decimal places.');
                    $amount.trigger('focus');
                    return;
                }
                if (!$action.val() || !$key.val()) {
                    showCreditError('The wallet credit form is incomplete. Close and reopen it, then retry.');
                    return;
                }

                $submit.prop('disabled', true).text('Processing…');
                $close.prop('disabled', true);
                try {
                    const result = await $.ajax({
                        url: $action.val(),
                        method: 'POST',
                        data: new FormData($form.get(0)),
                        dataType: 'json',
                        processData: false,
                        contentType: false,
                        headers: {
                            Accept: 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': $form.find('input[name="_token"]').val()
                        }
                    });
                    if (!result?.success || !result.data) throw new Error(result?.message || 'Wallet credit was not confirmed.');
                    const balance = Number(result.data.balance);
                    const $balance = $('.user-balance[data-user-id="' + Number(result.data.user_id) + '"]');
                    if ($balance.length && Number.isFinite(balance)) {
                        $balance.attr('data-balance', balance.toFixed(2));
                        $balance.text('₹' + balance.toLocaleString('en-IN', { minimumFractionDigits: 2, maximumFractionDigits: 2 }));
                    }
                    $success.text(result.message || 'Wallet credited successfully.').removeClass('d-none');
                    modal?.hide();
                    await notify('success', 'Credit successful', result.message || 'Wallet credited successfully.');
                    window.location.reload();
                } catch (error) {
                    const response = error.responseJSON || {};
                    const firstError = response.errors ? Object.values(response.errors).flat()[0] : null;
                    showCreditError(firstError || response.message || error.message || 'Network error. Please retry.');
                } finally {
                    $submit.prop('disabled', false).html('<i data-feather="plus-circle" class="me-1"></i> Add Money');
                    $close.prop('disabled', false);
                    if (window.feather) window.feather.replace();
                }
            });

            $(document).on('click.adminUsers', '.toggle-status-btn', async function (event) {
                event.preventDefault();
                const $button = $(this);
                if ($button.prop('disabled')) return;
                const userId = Number($button.data('id'));
                const action = String($button.data('action') || '');
                const userName = String($button.data('name') || 'this user');
                const form = $('#status-form-' + userId).get(0);
                if (!form) return notify('error', 'Action unavailable', 'The user status form could not be found.');

                const confirmed = window.Swal?.fire
                    ? await window.Swal.fire({
                        title: (action === 'block' ? 'Deactivate' : 'Activate') + ' user?',
                        text: 'Are you sure you want to ' + (action === 'block' ? 'deactivate ' : 'activate ') + userName + '?',
                        icon: action === 'block' ? 'warning' : 'question',
                        showCancelButton: true,
                        confirmButtonText: action === 'block' ? 'Deactivate' : 'Activate',
                        cancelButtonText: 'Cancel',
                        reverseButtons: true
                    })
                    : { isConfirmed: window.confirm('Confirm user status change?') };
                if (!confirmed.isConfirmed) return;

                $button.prop('disabled', true);
                try {
                    const response = await $.ajax({
                        url: form.action,
                        method: 'POST',
                        data: $(form).serialize(),
                        dataType: 'json',
                        headers: { Accept: 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
                    });
                    if (!response?.success || !response.data) throw new Error(response?.message || 'Status update was not confirmed.');
                    const status = response.data.status === 'active' ? 'active' : 'inactive';
                    const $statusCell = $('[data-user-status-cell="' + userId + '"]');
                    $statusCell.find('[data-user-status]')
                        .attr('data-user-status', status)
                        .attr('class', 'badge ' + (status === 'active' ? 'bg-success-soft text-success' : 'bg-danger-soft text-danger'))
                        .text(status === 'active' ? 'Active' : 'Blocked');

                    $button.attr('data-action', status === 'active' ? 'block' : 'unblock')
                        .attr('title', status === 'active' ? 'Deactivate User' : 'Activate User')
                        .toggleClass('text-warning', status === 'active')
                        .toggleClass('text-success', status !== 'active');
                    $button.find('i').attr('data-feather', status === 'active' ? 'slash' : 'check-circle')
                        .attr('class', status === 'active' ? 'text-warning' : 'text-info');
                    if (window.feather) window.feather.replace();
                    await notify('success', 'Status updated', response.message || 'User status updated successfully.');
                    window.location.reload();
                } catch (error) {
                    const response = error.responseJSON || {};
                    notify('error', 'Unable to update status', response.message || error.message || 'Please retry.');
                } finally {
                    $button.prop('disabled', false);
                }
            });

            $(document).on('click.adminUsers', '.delete-user-btn', async function (event) {
                event.preventDefault();
                const $button = $(this);
                if ($button.prop('disabled')) return;

                const userId = Number($button.data('id'));
                const userName = String($button.data('name') || 'this user');
                const form = $('#delete-form-' + userId).get(0);
                if (!form) {
                    await notify('error', 'Action unavailable', 'The user deletion form could not be found.');
                    return;
                }

                const confirmation = window.Swal?.fire
                    ? await window.Swal.fire({
                        title: 'Delete user?',
                        text: 'Delete ' + userName + '? This action cannot be undone.',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete user',
                        cancelButtonText: 'Cancel',
                        confirmButtonColor: '#dc3545',
                        reverseButtons: true
                    })
                    : { isConfirmed: window.confirm('Delete ' + userName + '? This action cannot be undone.') };

                if (!confirmation.isConfirmed) return;
                $button.prop('disabled', true);
                // Keep the existing CSRF-protected DELETE form and backend route.
                form.submit();
            });

            $(window).on('admin:user-presence.adminUsers', function (event) {
                const presence = event.originalEvent?.detail || event.detail || {};
                const userId = Number(presence.user_id);
                const $cell = $('[data-live-status-cell="' + userId + '"]');
                if (!$cell.length) return;
                const status = presence.live_status === 'active' ? 'active' : 'inactive';
                const activeFilter = @json($liveStatus ?? null);
                if (activeFilter && activeFilter !== status) {
                    $cell.closest('tr').remove();
                    return;
                }
                $cell.find('[data-live-status]')
                    .attr('data-live-status', status)
                    .attr('class', 'badge ' + (status === 'active' ? 'bg-success' : 'bg-secondary'))
                    .text(status.charAt(0).toUpperCase() + status.slice(1));
            });
        });
    </script>
@endsection
