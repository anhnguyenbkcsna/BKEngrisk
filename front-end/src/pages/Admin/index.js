import React from 'react';
import { makeStyles } from '@mui/styles';

const useStyles = makeStyles(() => ({
  para: {
    fontSize: '48px',
    color: 'red',
  },
}));

const Admin = () => {
  const styles = useStyles();
  return (
    <>
      <p className={styles.para}>This is Admin page</p>
    </>
  );
};

export default Admin;