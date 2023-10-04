import React from 'react';
import {Page, View, Text, Document, PDFViewer, StyleSheet, PDFDownloadLink} from '@react-pdf/renderer';

export default function () {
    const styles = StyleSheet.create({
        page: {
            flexDirection: 'row',
            backgroundColor: '#E4E4E4'
        },
        section: {
            margin: 10,
            padding: 10,
            flexGrow: 1
        }
    });

    const MyDoc = () => (
        <Document>
            <Page>
                // My document data
            </Page>
        </Document>
    );

    return (
        <div>
            <PDFViewer>
                <Document>
                    <Page size="A4" style={styles.page}>
                        <View style={styles.section}>
                            <Text>Section #1</Text>
                        </View>
                        <View style={styles.section}>
                            <Text>Section #2</Text>
                        </View>
                    </Page>
                </Document>
            </PDFViewer>
            <PDFDownloadLink document={<MyDoc />} fileName="somename.pdf">
                {({ blob, url, loading, error }) =>
                    loading ? 'Loading document...' : 'Download now!'
                }
            </PDFDownloadLink>
        </div>


    );
}