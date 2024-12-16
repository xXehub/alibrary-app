function sihubDrawCallback(settings) {
    var pagination = $(this).closest('.card').find('.card-footer');
    var tableInfo = this.api().page.info();

    // Update table info
    pagination.find('#tableInfo').html(
        `Data ke ${tableInfo.start + 1} ke ${tableInfo.end} dari ${tableInfo.recordsTotal} data`
    );

    // Custom pagination
    var paginationContainer = pagination.find('#tablePagination');
    paginationContainer.empty();

    // Previous button
    paginationContainer.append(
        `<li class="page-item ${tableInfo.page == 0 ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="${tableInfo.page - 1}" tabindex="-1" ${tableInfo.page == 0 ? 'aria-disabled="true"' : ''}>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="15 6 9 12 15 18" /></svg>
                sebelumnya
            </a>
        </li>`
    );

    // Page numbers
    for (let i = 0; i < tableInfo.pages; i++) {
        paginationContainer.append(
            `<li class="page-item ${i == tableInfo.page ? 'active' : ''}">
                <a class="page-link" href="#" data-page="${i}">${i + 1}</a>
            </li>`
        );
    }

    // Next button
    paginationContainer.append(
        `<li class="page-item ${tableInfo.page == tableInfo.pages - 1 ? 'disabled' : ''}">
            <a class="page-link" href="#" data-page="${tableInfo.page + 1}">
                selanjutnya
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18" /></svg>
            </a>
        </li>`
    );
}

// Event handler for custom pagination
$(document).on('click', '#tablePagination .page-link', function (e) {
    e.preventDefault();
    const table = $('#tableBase').DataTable();
    if (!$(this).closest('li').hasClass('disabled')) {
        table.page($(this).data('page')).draw('page');
    }
});


