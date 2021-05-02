import React from 'react';
import Link from '@material-ui/core/Link';
import { makeStyles } from '@material-ui/core/styles';
import Table from '@material-ui/core/Table';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';


// Generate Order Data
function createData(id, date, Companyname, sendTo) {
  return { id, date, Companyname, sendTo };
}

const rows = [
  createData(0, '16 Mar, 2019', 'Elvis Presley', 'test@test.com'),
  createData(1, '16 Mar, 2019', 'Paul McCartney', 'test@test.com'),
  createData(2, '16 Mar, 2019', 'Tom Scholz', 'test@test.com'),
  createData(3, '16 Mar, 2019', 'Michael Jackson', 'test@test.com'),
  createData(4, '15 Mar, 2019', 'Bruce Springsteen', 'test@test.com'),
];

function preventDefault(event) {
  event.preventDefault();
}

const useStyles = makeStyles((theme) => ({
  seeMore: {
    marginTop: theme.spacing(3),
  },
}));

export default function Orders() {
  const classes = useStyles();
  return (
    <React.Fragment>
      
      <Table size="small">
        <TableHead>
          <TableRow>
            <TableCell>Date</TableCell>
            <TableCell>CompanyName</TableCell>
            <TableCell>Send To</TableCell>
          
          </TableRow>
        </TableHead>
        <TableBody>
          {rows.map((row) => (
            <TableRow key={row.id}>
              <TableCell>{row.date}</TableCell>
              <TableCell>{row.Companyname}</TableCell>
              <TableCell>{row.sendTo}</TableCell>
            
            </TableRow>
          ))}
        </TableBody>
      </Table>
      <div className={classes.seeMore}>
        <Link color="primary" href="#" onClick={preventDefault}>
          See more orders
        </Link>
      </div>
    </React.Fragment>
  );
}