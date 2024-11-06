const Orders = [
    {
        productNo:'1',
        productName: 'Ali Hanan',
        productNumber: '198203110720080109',
        paymentStatus: '6474021103820001',
        paymentStatus2: '463760661130172',
        paymentStatus3: 'samarinda, 12-09-1996',
        paymentStatus4: '082246691999',
    },
    {
        productNo:'2',
        productName: 'Abimanyu',
        productNumber: '198203110720080113',
        paymentStatus: '6474021103820002',
        paymentStatus2: '',
        paymentStatus3: 'muara badak, 9-07-1990',
        paymentStatus4: '082246691888',
    },
    {
        productNo:'3',
        productName: 'Alex Simanjuntak',
        productNumber: '198203110720080115',
        paymentStatus: '6474021103820003',
        paymentStatus2: '463760661130188',
        paymentStatus3: 'bontang, 20-05-1989',
        paymentStatus4: '082246691777',
    },
    {
        productNo:'4',
        productName: 'Ali Hanan',
        productNumber: '198203110720080109',
        paymentStatus: '6474021103820001',
        paymentStatus2: '463760661130172',
        paymentStatus3: 'samarinda, 12-09-1996',
        paymentStatus4: '082246691999',
    },
    {
        productNo:'5',
        productName: 'Abimanyu',
        productNumber: '198203110720080113',
        paymentStatus: '6474021103820002',
        paymentStatus2: '',
        paymentStatus3: 'muara badak, 9-07-1990',
        paymentStatus4: '082246691888',
    },
    {
        productNo:'6',
        productName: 'Alex Simanjuntak',
        productNumber: '198203110720080115',
        paymentStatus: '6474021103820003',
        paymentStatus2: '463760661130188',
        paymentStatus3: 'bontang, 20-05-1989',
        paymentStatus4: '082246691777',
    },
    {
        productNo:'7',
        productName: 'Alex Simanjuntak',
        productNumber: '198203110720080115',
        paymentStatus: '6474021103820003',
        paymentStatus2: '463760661130188',
        paymentStatus3: 'bontang, 20-05-1989',
        paymentStatus4: '082246691777',
    },
    {
        productNo:'8',
        productName: 'Ali Hanan',
        productNumber: '198203110720080109',
        paymentStatus: '6474021103820001',
        paymentStatus2: '463760661130172',
        paymentStatus3: 'samarinda, 12-09-1996',
        paymentStatus4: '082246691999',
    },
    {
        productNo:'9',
        productName: 'Abimanyu',
        productNumber: '198203110720080113',
        paymentStatus: '6474021103820002',
        paymentStatus2: '',
        paymentStatus3: 'muara badak, 9-07-1990',
        paymentStatus4: '082246691888',
    },
    {
        productNo:'10',
        productName: 'Alex Simanjuntak',
        productNumber: '198203110720080115',
        paymentStatus: '6474021103820003',
        paymentStatus2: '463760661130188',
        paymentStatus3: 'bontang, 20-05-1989',
        paymentStatus4: '082246691777',
    },
    {
        productNo:'11',
        productName: 'Alex Simanjuntak',
        productNumber: '198203110720080115',
        paymentStatus: '6474021103820003',
        paymentStatus2: '463760661130188',
        paymentStatus3: 'bontang, 20-05-1989',
        paymentStatus4: '082246691777',
    },
    {
        productNo:'12',
        productName: 'Alex Simanjuntak',
        productNumber: '198203110720080115',
        paymentStatus: '6474021103820003',
        paymentStatus2: '463760661130188',
        paymentStatus3: 'bontang, 20-05-1989',
        paymentStatus4: '082246691777',
    },
    {
        productNo:'13',
        productName: 'Ali Hanan',
        productNumber: '198203110720080109',
        paymentStatus: '6474021103820001',
        paymentStatus2: '463760661130172',
        paymentStatus3: 'samarinda, 12-09-1996',
        paymentStatus4: '082246691999',
    },
    {
        productNo:'14',
        productName: 'Abimanyu',
        productNumber: '198203110720080113',
        paymentStatus: '6474021103820002',
        paymentStatus2: '',
        paymentStatus3: 'muara badak, 9-07-1990',
        paymentStatus4: '082246691888',
    },
    {
        productNo:'15',
        productName: 'Alex Simanjuntak',
        productNumber: '198203110720080115',
        paymentStatus: '6474021103820003',
        paymentStatus2: '463760661130188',
        paymentStatus3: 'bontang, 20-05-1989',
        paymentStatus4: '082246691777',
    },
]

Orders.forEach(order => {
    const tr = document.createElement('tr');
    const trContent = `
        <td>${order.productNo}</td>
        <td>${order.productName}</td>
        <td>${order.productNumber}</td>
        <td>${order.paymentStatus}</td>
        <td>${order.paymentStatus2}</td>
        <td>${order.paymentStatus3}</td>
        <td>${order.paymentStatus4}</td>
        <td class="primary"><button id="edit">Details</button></td>
        <td class="danger"><span class="material-symbols-outlined" id="hapus">delete</span></td>
    `;
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
});