import React from 'react';
import { makeStyles } from '@mui/styles';

const useStyles = makeStyles(() => ({
  para: {
    fontSize: '48px',
    color: 'green',
  },
}));

const Client = () => {
  const styles = useStyles();
  return (
    <>
      <p className={styles.para}>This is Client page</p>
    </>
  );
};

export default Client;